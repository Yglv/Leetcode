import "slices"

func merge(nums1 []int, m int, nums2 []int, n int) []int  {
    for i := m; i < m + n; i++{
        nums1[i] = nums2[i - m]
    }
    slices.Sort(nums1);
    return nums1
}