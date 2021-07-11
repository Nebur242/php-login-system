class User{

   email = '';
   password = '';

    constructor( email = '' , password = '' ){
        this.email = email;
        this.password = password
    }

    print(){
        console.log(`User has ${this.email} as email and ${this.password} as password`);
    }

    isValid(){
        const errors = [];
        if(this.email?.length < 6) errors.push('Please input a valid email !');
        if(this.password?.length < 8) errors.push('Please input a strong password !');
        return new Promise( ( resolve , reject ) => {
            if(errors.length > 0) return reject({ errors });
            return resolve(true)
        });
    }
}