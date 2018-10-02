console.log('Starting App...');

const fs = require('fs');
const yargs = require('yargs');
const _ = require('lodash');

const notes =  require('./notes.js');

const argv = yargs.argv;
//var command = process.argv[2];
var command = argv._[0];
console.log('Command: ', command);
//console.log('Process: ', process.argv);
console.log('Yargs: ', argv);

if(command === 'add')
{
    //console.log('Adding new note');
    notes.addNote(argv.title, argv.body);
}
else if(command === 'list')
{
    //console.log('Listing all notes');
    notes.getAll();
}
else if(command === 'read')
{
    //console.log('Reading a note');
    notes.readNote(argv.title);
}
else if(command === 'remove')
{
    //console.log('Removing a note');
    notes.removeNote(argv.title);
}
else
{
    console.log('Command not recognize');
}
