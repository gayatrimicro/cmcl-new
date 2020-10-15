var Imtech = {};
Imtech.Pager = function() {
    this.paragraphsPerPage = 3;
    this.currentPage = 1;
    this.pagingControlsContainer = '#pagingControls';
    this.pagingContainerPath = '#content';

    this.numPages = function() {
        var numPages = 0;
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(this.paragraphs.length / this.paragraphsPerPage);
        }
        
        return numPages;
    };

    this.showPage = function(page) {
        this.currentPage = page;
        var html = '';

        this.paragraphs.slice((page-1) * this.paragraphsPerPage,
            ((page-1)*this.paragraphsPerPage) + this.paragraphsPerPage).each(function() {
            html += '<div>' + $(this).html() + '</div>';
        });

        $(this.pagingContainerPath).html(html);

        renderControls(this.pagingControlsContainer, this.currentPage, this.numPages());
    }

    var renderControls = function(container, currentPage, numPages) {
        var pagingControls = '<ul style="display:inline-block;" class="pager-link">';
        console.log(currentPage);
        var prev_page = currentPage-1;
        var next_page = currentPage+1;
        if(!prev_page){
            pagingControls += '<li>Prev</li>';
        }
        if(prev_page > 0){
            pagingControls += '<li><a href="#" onclick="pager.showPage(' + prev_page + '); return false;">Prev</a></li>';
        }
        for (var i = 1; i <= numPages; i++) {
            if (i != currentPage) {
                pagingControls += '<li><a href="#" onclick="pager.showPage(' + i + '); return false;">' + i + '</a></li>';
            } else {
                pagingControls += '<li>' + i + '</li>';
            }
        }
        if(next_page > numPages){
            pagingControls += '<li>Next</li></ul><br>';
        }
        else{   
            pagingControls += '<li><a href="#" onclick="pager.showPage(' + next_page + '); return false;">Next</a></li></ul><br>';
        }
        pagingControls += '</ul>';

        $(container).html(pagingControls);
    }
}