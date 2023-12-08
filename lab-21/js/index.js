function createObject() {
    const propertyName = document.getElementById('propertyName').value;
    const propertyValue = document.getElementById('propertyValue').value;

    if (propertyName && propertyValue) {
      const newObject = { [propertyName]: propertyValue };
      saveObject(newObject);
    }
}

function saveObject(object) {
    fetch('save.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(object),
    })
    .then(response => response.json())
    .then(data => console.log('Success:', data))
    .catch(error => console.error('Error:', error));
}
