//Do a couple of console.logs
console.log("Hello from my_javascript.js");
console.log("Hello again!"); //This is not needed

/*
var name = prompt("What is your name?");
alert("Hello " + name);

name = "Nick";
console.log("The user's name is " + name);

console.log("Before");

var name = prompt("What is your name?")

if(name) {
	console.log("If block");
} else {
	console.log("Else block")
}

console.log("After");


console.log("Before");

var counter = 10;

while(counter) {
	console.log('Hello World');
	counter = counter -1;
}

while(prompt("What is your name?")) {
	console.log("Got your name")
}

for(var counter=10; counter; counter = counter-1) {
	console.log("Hello World", counter)
}

var counter = 1;

while(counter <= 100) 
{
	if(counter % 3 == 0 && counter % 5 == 0) 
	{
		console.log("fizzbuzz");
	}
	if(counter % 3 == 0) 
	{
		console.log("fizz");
	}
	if(counter % 5 == 0) 
	{
			console.log("buzz");
	}
	else 
	{
			console.log(counter);
	}
	counter = counter + 1;
}

console.log("After");

var friends = ["Nick", "Michael", "Amit"];
console.log(friends);
console.log(friends.length);

var friendNumber = 1
console.log(friends[friendNumber]);

for(var i = 0; i < friends.length; i+=1) {
	console.log(friends[i]);
}

var me = {
	first_name: "Jim",
	last_name: "Hoskins",
	"Employee Number": 1
}

console.log(me.first_name);
console.log(me.last_name);
console.log(me["Employee Number"]);

var key = "first_name";

console.log(me[key]);
*/
 var sayHello = function () {
 	console.log("Hello World!")
 }

 var debug = function (message) {
 	console.log("Debug", message)
 }

 var doubleNumber = function (num) {
 	return num * 2;
 }

sayHello();

debug(doubleNumber(7));

var x = 1;

x += 10;
debug("x has been set");
var y =100;

sayHello();
