export function login(creadintal) {
    return new Promise((res, rej) => {
        axios.post('api/login', creadintal).then(response => {
            res(response.data);
        })
            .catch(err => {
                rej('Worng Email/Password')
            })

    })
};

export function getLoggedInUser(){
    const userStr = localStorage.getItem('user')

    if(!userStr){
        return null
    }
    return JSON.parse(userStr)
};
