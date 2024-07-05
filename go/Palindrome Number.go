func isPalindrome(x int) bool {
	var revertedNum, startNum int = 0, x
	if x < 0 {
		return false
	}
	for x > 0 {
		revertedNum = revertedNum*10 + x%10
		x /= 10
	}
	if revertedNum == startNum {
		return true
	}
	return false
}