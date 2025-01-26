# PHP Loose Comparison Pitfalls
This repository demonstrates a common error in PHP related to loose comparison (==) versus strict comparison (===).
Loose comparison can lead to unexpected results when comparing values of different types.  The example shows how 0 and '0' are considered equal using loose comparison but not strict comparison.

## Bug Description
The bug is caused by the use of loose comparison (==) in the `foo` function.  Loose comparison does type juggling and can lead to unexpected results. Strict comparison (===), on the other hand, checks for both value and type equality, preventing such issues.

## Solution
The solution involves changing the comparison operator to === (strict comparison) to ensure that both value and type are checked before returning a result.