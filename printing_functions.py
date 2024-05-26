def describe_city(city, country = "Philippines"):
    City = city.title()
    Country = country.title()
    print(f"{City} is in {Country}")

def show_messages(text):
    for i in text:
        print(i)

def favorite_book(title):
    book = title.title()
    print(f"My favorite book is {book}.")

def sandwich(*ingredients):
    print("Your sandwich will have the following ingredients:")
    for i in ingredients:
        print(f"   {i}")
