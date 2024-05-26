def sandwich(*ingredients):
    print("Your sandwich will have the following ingredients:")
    for i in ingredients:
        print(f"   {i}")

sandwich("Tuna", "Lettuce", "Tomato", "Mayonaise")
sandwich("Ham", "Cheese", "Lettuce", "Tomato")
sandwich("Peanut Butter", "Jelly")