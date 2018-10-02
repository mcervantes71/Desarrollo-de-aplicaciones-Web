console.log('Starting notes...');

var addNote = (title, body) => {
    console.log('Note Added');
};

var readNote = () => {
    console.log('Reading a note');
}

var removeNote = () => {
    console.log('Removing a note');
}

var getAll = () => {
    console.log('Listing all notes');
}


module.exports = {
    addNote,
    readNote,
    removeNote,
    getAll
}
