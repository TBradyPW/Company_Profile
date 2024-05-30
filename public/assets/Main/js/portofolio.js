$.ajax({
    url : baseURL + 'Category',
    type : 'GET', 
    success: function(kontol) {
        if (kontol.data.length > 0){
            var categoryData = kontol.data;
            var container = $('#Category');
            container.empty();
            categoryData.forEach(function(category) {
                let content = 
                    `<button type="button" class="control" data-filter="all">${category.nama_category}</button>`
                    container.append(content);     
            });
        } else {
            let content = 
                `<h1>Tidak ada category</h1>`
                container.append(content)
        }   
    },
    error: function (_xhr, status, error) {
        console.error(status + ': ' + error);
    }
});