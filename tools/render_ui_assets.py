"""Re-render seven UI PNGs from the bundled Font Awesome Free 5.15.3 font.

Optional development tool: Python 3 + Pillow. No dependency is added to PHP.
Font Awesome attribution and license mapping: docs/ASSET_PROVENANCE.md.
"""
from pathlib import Path
from PIL import Image, ImageDraw, ImageFont

ROOT = Path(__file__).resolve().parents[1]
FONT = ROOT / "ressources/style/vendor/fontawesome-free/webfonts/fa-solid-900.ttf"
OUT = ROOT / "ressources/style/img"
SCALE = 4
BLUE = (62, 100, 211, 255)
WHITE = (255, 255, 255, 255)
CLEAR = (0, 0, 0, 0)

def canvas(width, height, background=CLEAR):
    return Image.new("RGBA", (width * SCALE, height * SCALE), background)

def glyph(image, codepoint, box, colour):
    x, y, width, height = [round(value * SCALE) for value in box]
    font = ImageFont.truetype(str(FONT), max(width, height))
    bounds = font.getbbox(chr(codepoint))
    text_width, text_height = bounds[2] - bounds[0], bounds[3] - bounds[1]
    factor = min(width / text_width, height / text_height)
    font = ImageFont.truetype(str(FONT), max(1, round(font.size * factor)))
    bounds = font.getbbox(chr(codepoint))
    left = x + (width - (bounds[2] - bounds[0])) // 2 - bounds[0]
    top = y + (height - (bounds[3] - bounds[1])) // 2 - bounds[1]
    ImageDraw.Draw(image).text((left, top), chr(codepoint), font=font, fill=colour)

def save(name, image, size):
    image.resize(size, Image.Resampling.LANCZOS).save(OUT / name, optimize=True)

def main():
    image = canvas(512, 512)
    glyph(image, 0xf067, (5, 5, 502, 502), (72, 109, 219, 255))
    save("add.png", image, (512, 512))

    image = canvas(169, 186)
    glyph(image, 0xf02d, (44, 9, 91, 105), BLUE)
    glyph(image, 0xf4bd, (12, 111, 145, 66), BLUE)
    save("borrow.png", image, (169, 186))

    image = canvas(160, 159)
    glyph(image, 0xf02d, (15, 7, 111, 140), BLUE)
    draw = ImageDraw.Draw(image)
    draw.ellipse(tuple(v*SCALE for v in (84, 84, 158, 158)), fill=WHITE)
    glyph(image, 0xf0ab, (88, 88, 65, 65), BLUE)
    save("restore.png", image, (160, 159))

    image = canvas(50, 50)
    glyph(image, 0xf02f, (1, 1, 48, 48), BLUE)
    save("print.png", image, (50, 50))

    image = canvas(512, 512)
    glyph(image, 0xf518, (20, 30, 472, 452), WHITE)
    save("logo.png", image, (512, 512))

    for name, codepoint in (("defaultBook.png", 0xf518), ("defaultStudent.png", 0xf007)):
        image = canvas(623, 1000, (128, 128, 128, 255))
        glyph(image, codepoint, (125, 310, 373, 380), WHITE)
        save(name, image, (623, 1000))

if __name__ == "__main__":
    main()
