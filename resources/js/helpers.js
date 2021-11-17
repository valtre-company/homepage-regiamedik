// Function to remove the accents in a string
const removeAccents = (string) => {
    const accents = 'ÀÁÂÃÄÅàáâãäåÒÓÔÕÕÖØòóôõöøÈÉÊËèéêëðÇçÐÌÍÎÏìíîïÙÚÛÜùúûüÑñŠšŸÿýŽž';
    const accentsOut = "AAAAAAaaaaaaOOOOOOOooooooEEEEeeeeeCcDIIIIiiiiUUUUuuuuNnSsYyyZz";
    const str = string.split('');
    const strLen = str.length;
    let i, x;
    for (i = 0; i < strLen; i++) {
        if ((x = accents.indexOf(str[i])) != -1) {
            str[i] = accentsOut[x];
        }
    }
    return str.join('');
}
// Function to format price in MX
const formatPrice = (price) => {
    if (typeof price === 'number') {
        var formatter = new Intl.NumberFormat('es-ES', {
            style: 'currency',
            currency: 'MXN',
        });        
        return "$" + formatter.format(price);     
    } else {
        return price + " MXN";
    }   
}

// Change text to lowercase and after capitalizeFirstLetter
const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}

const filterArrayByValue = (array,value) => {
    return array.filter(({name,price}) => {    
        name =  removeAccents(name).toLowerCase()                      
        price = price.toString();         
        return (name.indexOf(removeAccents(value).toLowerCase()) > -1 || price.indexOf(value) > -1);         
    });
}
export { removeAccents, formatPrice, capitalizeFirstLetter, filterArrayByValue };