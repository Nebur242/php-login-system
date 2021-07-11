const handleError = (errors) => {
    const jsErrors = document.querySelector('.js-errors');
    const htmlTempalte = errors?.reduce( (acc , curr , index) => {
        return acc + `<div class="uk-margin uk-alert uk-alert-danger js-error"> ${curr} </div>`
    } , "" );
    jsErrors.innerHTML = htmlTempalte;
}

const clearErrors = () => document.querySelector('.js-errors').innerHTML = '';

const fetchAPI = async ({url , method , headers = {} , body = {}}) => {
    // console.log(url , method)
    try {
        if(method?.toLowerCase() !== 'get'){
            const response = await fetch( url , { method , headers , body});
            const data = await response.json();
            return [ data , null];
        }

        if(method?.toLowerCase() === 'get'){
            const response = await fetch(url);
            const data = await response.json();
            return [ data , null];
        }

    } catch (error) {
        console.log(error)
        return [ null , error?.message]
    }
}

const handleSubmit = async event => {
    event.preventDefault();
    try {
        //!FORM INPUTS
        clearErrors();
        const _form = new FormData(event.currentTarget);
        const email = _form.get('email');
        const password = _form.get('password');

        //!HANDLE USER
        const user = new User(email , password);
        await user.isValid();

        const [ data , error ] = await fetchAPI({
            url : '/login-system/api/register.php',
            method : 'POST',
        });

        if(data){
            console.log(data)
        }

        if(error){
            console.log(error)
        }


        // const [] = await fetchAPI()

    } catch (error) {
        console.log(error)
        if(error?.errors){
            handleError(error?.errors)
        }
    }
}

window.addEventListener('load' , () => {
    const form = document.querySelector('form.js-register');
    form.addEventListener('submit' , handleSubmit);
});