<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        while($head){
            $node = new ListNode($head->val);

            if(isset($result)){
                $node->next = $result;
                $result = $node;
            } else {
                $result = $node;
            }
			
            $head = $head->next;
        }
        return $result;
    }
}