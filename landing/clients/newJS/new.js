// //Variables
// var salary = 20000;
// var vat = 0.38;
// var net = salary * vat

// var decision = ( net < 2000) ? "UnderSalary":"Over salary"
// var fname = "Jean Poul";
// var sname = "IRAKOZE";

// var date = new Date()

// var day = date.getDay()
// date = date.toLocaleString()
// document.write("<h1>hello from javascript</h1>")
// console.log("Hello from console")

// // display statement
// document.write( "<h1>Your names are:  " +fname+" "+ sname + "</br> </br> ")

// document.write( "<h2>" +fname+" got "+ salary  + " of salary </h2>")

// document.write( "<h2>" +fname+" is "+ decision + "</h2>")
// document.write(" date is:<h5>"+date +"</br> </br> ")
// document.write("We are on the day " +day +"</br> </br> ")

// switch(day){


//     case 1:
//         document.write("to day is  Monday </br>");
//         break;
//     case 2:
//         document.write(" and to day is  Tuesday </br>");
//         break;
//     case 3:
//         document.write(" and to day is  Thursday </br>");
//         break;
//     case 4:
//         // document.write(" and to day is  Wednesday");
//         break;
//     case 5:
//         document.write(" and to day is  Friday </br>");
//         break;
//     case 6:
//         document.write(" and to day is  Saturday </br>");
//         break;

//         case 7:
//         document.write("Sunday");
//         break;
//         default:
//             document.write("OOPS!!");
//             break;

     

       
// }

// function promp(){
//     var name = prompt ("Please Enter your names: ");
//      if(name != null && name != ""){
//        document.write("</br>  your name is: "+ name);
//      }
//      else{
//          alert("you did'nt enter any name!")
//      }
//  }
// promp()





//SIMPLE CALCULATOR


// var firstNum;
// var secondNum;
// var operator;

// firstNum = prompt("Enter first number: ");
// firstNum = parseFloat(firstNum);
// operator = prompt("Enter any oparetor: ");
// secondNum = prompt("Enter second number: ");
// secondNum = parseFloat(secondNum);


// switch(operator){
//     case '+':
//         document.write(firstNum+secondNum);
//         break;
//     case '-':
//         document.write(firstNum-secondNum);
//         break;
//     case '/':
        
//         document.write(firstNum/secondNum);
//         break;
//     case '*':
//         document.write(firstNum*secondNum);
//         break;
//     case '%':
//         document.write(firstNum%secondNum);
//         break;

//         default:
//             document.write("You enterd invalds input");
//             break;
// }




var n = 0;
while(n <= 5){
    document.write("Number: "+ n);
    document.write("</br>");
    n++;
}