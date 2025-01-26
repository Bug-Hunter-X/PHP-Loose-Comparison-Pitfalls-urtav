function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This function will return false even if a and b are both equal to 0, due to loose comparison
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