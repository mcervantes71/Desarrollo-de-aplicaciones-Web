console.log('Starting App');

const fs = require('fs');
const os = require('os');

fs.appendFile('greetings.txt', 'Hello World', function(err) {
    if(err)
    {
        concole.log('Unable to write to file');
    }
});
