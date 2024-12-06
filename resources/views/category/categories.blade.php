<select id="category">
    @foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>

<select id="subcategory"></select>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#category').change(function() {
        var categoryID = $(this).val();

        $.ajax({
            url: '/get-subcategories',
            type: 'GET',
            data: {
                category_id: categoryID
            },
            success: function(response) {
                var subcategoryDropdown = $('#subcategory');

                subcategoryDropdown.empty();

                $.each(response, function(index, subcategory) {
                    subcategoryDropdown.append(new Option(subcategory.name, subcategory.id));
                });
            }
        });
    });
</script>