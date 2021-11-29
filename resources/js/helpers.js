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
    value = removeAccents(value.toLowerCase());
    return array.filter(({name,description, min_price, max_price, lead_time, all_locations }) => {    
        all_locations = removeAccents(all_locations.toLowerCase());
        name = removeAccents(name.toLowerCase());
        lead_time = removeAccents(lead_time.toLowerCase());                      
        description =  removeAccents(description).toLowerCase()
        min_price = min_price.toString();         
        max_price = max_price.toString();
        return (
            name.indexOf(value) > -1 || 
            lead_time.indexOf(value) > -1 ||
            description.indexOf(value) > -1 ||
            min_price.indexOf(value) > -1 || 
            max_price.indexOf(value) > -1 || 
            all_locations.indexOf(value) > -1
        );         
    });
}

export { removeAccents, formatPrice, capitalizeFirstLetter, filterArrayByValue };