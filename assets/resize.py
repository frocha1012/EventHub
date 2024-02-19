from PIL import Image

# Load the image
image = Image.open('fundo.jpg')

# Resize the image
image_small = image.resize((int(image.width / 8), int(image.height / 8)))

# Save the resized image
image_small.save('fundo2.jpg')
