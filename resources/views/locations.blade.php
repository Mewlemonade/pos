<select id="country">
    @foreach ($countries as $country)
    <option value="{{ $country->id }}">{{ $country->name }}</option>
    @endforeach
</select>

<select id="city"></select>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#country').change(function() {
        var countryID = $(this).val();

        $.ajax({
            url: '/get-cities',
            type: 'GET',
            data: {
                country_id: countryID
            },
            success: function(response) {
                var cityDropdown = $('#city');

                cityDropdown.empty();

                $.each(response, function(index, city) {
                    cityDropdown.append(new Option(city.name, city.id));
                });
            }
        });
    });
</script>