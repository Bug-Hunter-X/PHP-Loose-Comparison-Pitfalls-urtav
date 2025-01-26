function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This function will return false because it is using strict comparison
console.log(foo(0, '0')); //false

function foo2(a, b) {
  if (a == b) {
    return true;
  } else {
    return false;
  }
}

//This will work correctly and will return true 
console.log(foo2(0, '0')); //true