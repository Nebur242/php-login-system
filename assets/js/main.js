const handleError = (errors) => {
    const jsErrors = document.querySelector('.js-errors');
    const htmlTempalte = errors?.reduce( (acc , curr , index) => {
        return acc + `<div class="uk-margin uk-alert uk-alert-danger js-error"> ${curr} </div>`
    } , "" );
    jsErrors.innerHTML = htmlTempalte;
}

const clearErrors = () => document.querySelector('.js-errors').innerHTML = '';

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