(function(dom, wnd) {
    wnd.Validate = function() {

        this.userinfo = function() {
            //Defines
            var name, surname, email, username, password, repeatpswd, form, regx_email, new_node;
            name = dom.querySelector('.user');
            surname = dom.querySelector('.surname');
            email = dom.querySelector('.email');
            username = dom.querySelector('.username');
            password = dom.querySelector('.password');
            repeatpswd = dom.querySelector('.repeatpswd');
            form = dom.querySelector('.form');
            regx_email = new RegExp("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/", "g");

            //Accepts
            //Name
            name.addEventListener('keyup', function() {

                if (name.value == "") {
                    name.style.border = "1px solid red";
                    // var link =  ... get the `a` element from somewhere ...  ;
                    function insertAfter(elem, refElem) {
                        return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
                    }
                    new_node = dom.createElement('span');
                    //continue styling
                    insertAfter(next_node,name);
                    /*new_node = document.createElement("div");
                    new_node.classList.add("tooltip");
                    new_node.innerHTML = html;
                    name.parentNode.insertBefore(new_node, name);*/

                } else {
                    name.style.border = "1px solid green";
                }
            });

            //Surname
            surname.addEventListener('keyup', function() {

            });



            //Email
            email.addEventListener('keyup', function() {
                if (email.value == "" && regx_email.test(email.value) == false) {
                    email.style.border = "1px solid red";
                } else {
                    email.style.borderColor = "green";
                }
            });




        }
        this.metadata = function() {

        }
    }
    var email_validate = new Validate();
    email_validate.userinfo();

})(document, window);