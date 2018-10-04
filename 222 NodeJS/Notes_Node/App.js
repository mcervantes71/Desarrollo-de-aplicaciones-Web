console.log('Starting App...');

const fs = require('fs');
const os = require('os');
const _ = require ('lodash'); //3rd party modules

const notes = require('./notes.js'); //own modules

let user = os.userInfo();
console.log(user);

//Option One
//fs.appendFile('greetings.txt', 'Hello, ' + user.username, function(err) {
/*fs.appendFile('greetings.txt', `Hello, ${user.username}. You are ${notes.age} years old.`, function(err) {
    if(err)
    {
        concole.log('Unable to write to file');
    }
});*/

//Option Two
//fs.appendFileSync('greetings.txt', 'Hello World');

let note = notes.addNote();
console.log(note);


console.log('* * *   Quick Challenge   * * *')
let add = notes.add(5, 9);
console.log(add);


console.log(_.isString(true));
console.log(_.isString('Andrew'));

var filteredArray = _.uniq(["Martin", 1, "Martin", 2, 3, 4]);
console.log(filteredArray);
