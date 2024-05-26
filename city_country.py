def city_country(city, country):
    City = city.title()
    Country = country.title()
    return City + ", " + Country

print(city_country("Pasig Ciy", "Philippines"))
print(city_country("Bangkok", "Thailand"))
print(city_country("Taipei", "Taiwan"))