// const axios = require('axios')
// const url = 'http://checkip.amazonaws.com/';
const mysql = require('mysql2');



/**
 *
 * Event doc: https://docs.aws.amazon.com/apigateway/latest/developerguide/set-up-lambda-proxy-integrations.html#api-gateway-simple-proxy-for-lambda-input-format
 * @param {Object} event - API Gateway Lambda Proxy Input Format
 *
 * Context doc: https://docs.aws.amazon.com/lambda/latest/dg/nodejs-prog-model-context.html 
 * @param {Object} context
 *
 * Return doc: https://docs.aws.amazon.com/apigateway/latest/developerguide/set-up-lambda-proxy-integrations.html
 * @returns {Object} object - API Gateway Lambda Proxy Output Format
 * 
 */
exports.lambdaHandler = async (event, context) => {

    
    let response = {
        'statusCode': 500,
        'body': JSON.stringify({
            message: 'Response not set. Default response.'
        })
    }

    try {

        //create db connection
        const dbconnection = mysql.createConnection({
            host     : process.env.db_host,
            port     : process.env.db_port,
            database : process.env.db_name,
            user     : process.env.db_user,
            password : process.env.db_password
        });

        let reqdata = JSON.parse(event.body);

        //data validation

        //id
        if(!reqdata.id ){
            response = {
                'statusCode': 500,
                'body': JSON.stringify({
                    message: "Missing id"
                })
            }
            return response;
        }

        //Check if id is valid
        let isValidId = false;
        let hasError = false;

        await new Promise((resolve,reject) => {

            try {
                //Sql query
                let sqlFind = `SELECT COUNT(1) count FROM incentives `+
                `WHERE id = ? `;
        
                let sqlFindData = [
                    reqdata.id,
                ];

                //execute query
                dbconnection.query(sqlFind, sqlFindData, function (err, result) {
                    if (err) {
                        response = {
                            'statusCode': 500,
                            'body': JSON.stringify(err)
                        }
                        hasError = true;
                        resolve(true);
                    }else{
                        //If invalid id
                        if(result[0]['count'] == 0){
                            resolve(true);
                        }else{
                            isValidId = true;
                            resolve(true);
                        }
                    }
                });
            } catch (err) {
                response = {
                    'statusCode': 500,
                    'body': JSON.stringify(err)
                }
                hasError = true;
                resolve(true);
            }
        })

        if(hasError){
            return response;
        }

        if(!isValidId){
            response = {
                'statusCode': 500,
                'body': JSON.stringify({
                    message: 'id not found',
                })
            }
            return response;
        }

        hasError = false;
        //If valid id update incentive status
        await new Promise((resolve,reject) => {

            try {

                //Update incentive status

                //current time stamp
                let utctimestamp = new Date().toISOString().slice(0, 19).replace('T', ' ');

                //Sql query
                let sqlUpdate = `UPDATE incentives SET `+
                `incentive_status = ?, `+
                `incentive_time = ?, `+
                `updated_by = ?, `+
                `updated_on = ? `+
                `WHERE id = ? `;
        
                let sqlUpdateData = [
                    '1',
                    utctimestamp,
                    'api-incentivesave',
                    utctimestamp,
                    reqdata.id,
                ];

                //execute query
                dbconnection.query(sqlUpdate, sqlUpdateData, function (err, result) {
                    if (err) {
                        response = {
                            'statusCode': 500,
                            'body': JSON.stringify(err)
                        }
                        hasError = true;
                        resolve(true);
                    }else{
                        response = {
                            'statusCode': 200,
                            'body': JSON.stringify({
                                message: 'OK',
                                affectedRows: result['affectedRows']
                            })
                        }
                        resolve(true);
                    }
                });
            } catch (err) {
                response = {
                    'statusCode': 500,
                    'body': JSON.stringify(err)
                }
                hasError = true;
                resolve(true);
                //return err;
            }
        });

        if(hasError){
            return response;
        }

        return response;
     
    } catch (err) {
        response = {
            'statusCode': 500,
            'body': JSON.stringify(err)
        }

        return response;
    }
};
