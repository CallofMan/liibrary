let choiceCategories = document.querySelectorAll('.head_elem');

choiceCategories.forEach(element => 
{
    element.addEventListener('click', function() 
    {
        let choiceCategory = element.getAttribute('id');

        switch (choiceCategory)
        {
            case 'read'         : choiceCategory = 1;    break;
            case 'will_read'    : choiceCategory = 2;    break;
            case 'all_books'    : choiceCategory = 3;    break;
            default             : choiceCategory = 0;    break;
        }

        if(choiceCategory)
        {
            fetch('output_data_in_index.php?choiceCategory=' + choiceCategory)
            .then((response) => 
            {
                return response.text();
            })
            .then((data) => 
            {
                document.querySelector('main').innerHTML = data;
            })
        }


    })
});