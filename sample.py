def get_formatted_name(first, last):
    full_name = f"{first} {last}"
    return full_name.title()

while True:
    f_name = input("First name: ")
    if f_name == 'q':
        break
    l_name = input("Last name: ")
    if l_name == 'q':
        break
    formatted_name = get_formatted_name(f_name, l_name)
    print(f"Hello, {formatted_name}!")