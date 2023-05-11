
const app = require('./app.js');

//Load environment variables from .env
const envconfig = require('dotenv');

const runner =  async () => {

    //Envornment vars
    envconfig.config()

    //Input
    const event =   {
        "body":JSON.stringify({
            "id": ["1","2"]
        })
    };

    //Result
    const result = await app.lambdaHandler(event, null);

    console.log(`Status code: ${result.statusCode}`);
    console.log(JSON.stringify( JSON.parse(result.body), null, 4) );

    process.exit();
}

runner();

