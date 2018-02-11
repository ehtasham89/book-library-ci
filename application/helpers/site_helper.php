<?php

if(!function_exists('paginateLinks'))
{
    /**
     * Passing current page number and last page number with paginaiton links limit. 
     *
     * @param   int $currentPage
     * @param   int $lastPage
     * @param   int $limit
     * @return  html
     */
    function paginateLinks($currentPage = 1, $lastPage = 1, $limit = 10)
	{
        $inputs = $_GET;
        $url='';

        if (count($inputs)) {
            foreach ($inputs as  $key => $uri) {
                if ($key != "page") {
                    $url .= $key.'='.$uri.'&'; 
                }
            }
        }

        if ($lastPage > 1) {
        	$html = '<ul class="pagination justify-content-center">';
        	$html .= $currentPage == 1 ? '<li class="page-item disabled">':'<li>';
		    $html .= '<a href="?'.$url.'page=1" class="page-link">First</a></li>';     
            
            for ($i = 1; $i <= $lastPage; $i++) {
                if ($limit == 1) {
                    $from = 1;
                    $to = $lastPage;
                } else {
                    $halfTotalLinks = floor($limit / 2);
                    $from = $currentPage - $halfTotalLinks;
                    $to = $currentPage + $halfTotalLinks;

                    if ($currentPage < $halfTotalLinks) {
                    $to += $halfTotalLinks - $currentPage;
                    }

                    if ($lastPage - $currentPage < $halfTotalLinks) {
                        $from -= $halfTotalLinks - ($lastPage - $currentPage) - 1;
                    }
                }
               
                if ($from <= $i && $i <= $to) { 
                	$html .= $currentPage == $i ? '<li class="page-item active">':'<li>';
               		$html .= '<a href="?'.$url.'page='.$i.'" class="page-link">'.$i.'</a></li>';
                }
            }
            
            $html .= $currentPage == $lastPage ? '<li class="page-item disabled">' : '<li>';
	        $html .=    '<a href="?'.$url.'page='.$lastPage.'" class="page-link">Last</a></li></ul>';
            
            return $html;
        }

        return null;
	}
}
