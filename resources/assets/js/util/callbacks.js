export default {
    successCallback: (data) => {
        alert('Se creo el menu correctamente');
        console.log('Este es el menu que se creo', data);
    },

    errorCallback: (err) => {
        alert('No funco :(');
        console.warn('se presento lo siguiente', err);
    }
}