const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const { response } = require('express');
const session = require('express-session');

app.use(session({
    secret: 'keyboardcat',
    resave: false,
    saveUninitialized: true,
}));

app.use(bodyParser.urlencoded({extended: true}));
app.set("view engine", "ejs");
app.use(bodyParser.json());

app.get("/", (req, res)=>{
    res.render("index",{errors: null});
});

app.post("/register",(req,res)=>{
    const user = {};
    const errormessages = {};
    (req.body.firstname == "")? errormessages["firstname"] ="Should not be empty!" : user["firstname"] = req.body.firstname;
    (req.body.lastname == "")? errormessages["lastname"] ="Should not be empty!" : user[" lastname"] = req.body.lastname;
    (req.body.email == "")? errormessages["email"] ="Should not be empty!" : user["email"] = req.body.email;
    (req.body.password == "")? errormessages["password"] ="Should not be empty!" : user["password"] = req.body.password;

    for(let key in errormessages){
        if(errormessages[key]!=""){
           return res.render('index', {errors: errormessages});
        }
    }
    req.session.user = user;
    res.render('login', {error:null});
})

app.post('/login', (req, res)=>{
    const user = req.session.user;
    const errormessages = {};
    if(req.body.email != user.email){
       errormessages["email"]="Email doesn't match!"
    }
    if(req.body.password != user.password){
        errormessages["password"] = "Password doesn't match!"
    }

    for(let key in errormessages){
        if(errormessages[key]!=""){
           return res.render('login', {error: errormessages});
        }
    }

    res.render('bio');
});


app.listen(8000, ()=>{
    console.log("The port is listening on port 8000")
})
