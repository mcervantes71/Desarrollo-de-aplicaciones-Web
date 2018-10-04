console.log('Starting notes.js');


module.exports.age = 30;

module.exports.addNote = () => {
    console.log('Note added');
    return 'New note';
}

module.exports.add = (a, b) => {
    return a + b;
}
