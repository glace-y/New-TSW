def describe_city(city, country = "Philippines"):
    City = city.title()
    Country = country.title()
    print(f"{City} is in {Country}")

describe_city("tokyo", "Japan")
describe_city("cabuyao")
describe_city("London","England")