func removeDuplicates(nums []int) int {
	i := 0
	for j, _ := range nums {
		if nums[i] != nums[j] {
			i++
			nums[i] = nums[j]
		}
	}
	return i + 1
}