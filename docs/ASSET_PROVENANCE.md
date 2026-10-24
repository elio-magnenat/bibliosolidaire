# Interface asset provenance

Reviewed and replaced on 24 October 2026.

## Seven PNGs

All seven files are in `ressources/style/img/`. No author, original URL, license, or ownership evidence was found for the earlier PNGs in the prepared tree; their metadata did not establish permission. All seven have been replaced. The original archive outside this folder was not modified. Similarity to an icon is not treated as evidence of a license.

| File | Actual use | Replacement Font Awesome glyph(s) | Pixels |
| --- | --- | --- | --- |
| add.png | Additional-copy action in the book catalogue | plus (F067) | 512 x 512 |
| borrow.png | Loan action in the book catalogue | book (F02D) + hand-holding (F4BD) | 169 x 186 |
| restore.png | Return action in the book catalogue | book (F02D) + arrow-circle-down (F0AB) | 160 x 159 |
| print.png | Student detail / print-card action | print (F02F) | 50 x 50 |
| logo.png | Sidebar application symbol (not an institutional logo) | book-open (F518) | 512 x 512 |
| defaultBook.png | Book detail fallback without an uploaded cover | book-open (F518) | 623 x 1000 |
| defaultStudent.png | Student detail fallback without an uploaded photograph | user (F007) | 623 x 1000 |

## Source and attribution

Replacements were rendered locally from the already bundled **Font Awesome Free 5.15.3**, `fa-solid-900.ttf`, by **Fonticons, Inc.** They are derived icon artwork. Attribution: **Font Awesome Free 5.15.3 by Fonticons, Inc. — https://fontawesome.com/**.

The [vendor summary](../ressources/style/vendor/fontawesome-free/LICENSE.txt) and [upstream versioned license](https://github.com/FortAwesome/Font-Awesome/blob/5.15.3/LICENSE.txt) distinguish icon artwork (CC BY 4.0), fonts (SIL OFL 1.1), and code (MIT). Rendered PNGs retain icon-artwork attribution under [CC BY 4.0](../licenses/CC-BY-4.0.txt); the source font remains covered by [OFL 1.1](../licenses/SIL-OFL-1.1.txt). [Font copyright metadata](../licenses/font-copyrights.txt) is preserved. No trademark/brand glyph is used for these replacements.

Changes: rasterization, resizing, blue/white recoloring, composition of two glyphs for loan/return, and gray backgrounds for fallback images. Filenames, dimensions, actions, and layout are retained; icon outlines differ from the originals. The sidebar symbol is a generic book, with no ETML or African Puzzle mark.

The optional [rendering script](../tools/render_ui_assets.py) needs Python 3 and Pillow. It uses only the bundled font and local drawing. Pillow is a regeneration tool, not an application dependency, and is not redistributed. PHP installation does not need Python.

## Institutional presentation

No ETML logo or African Puzzle logo was present in the prepared tree. The association-related footer phrase was removed because no applicable reuse grant was established. Its replacement is “BiblioSolidaire — Projet pédagogique 2025”. Unused African Puzzle logo CSS was removed. School and association names in the README remain factual project context.

## Hash record

The excluded originals are identified by digest only; these digests are not permission evidence. None of their image bytes is retained in publication files.

```text
add.png
  excluded original SHA-256: 80c19d8379200c2572fa5a1a9f0680e058d249b3faa17dabb0b15d42234368ae
  replacement SHA-256: 49f3cde9e4f2a49a43aeabe2e5262efcc186bd00b2050698c5ac5a6c64a089cc
borrow.png
  excluded original SHA-256: 952ab97ccf012cd509576596ad748a7204c22f8c3c9edcb962e294c841bed640
  replacement SHA-256: ef73fe4bd81af8c0a3079b8aaf9061f6e012a5a821c73454db8d7d6c10af6866
restore.png
  excluded original SHA-256: 01f4198ff5bd0df47ec86dd6626f49d310c92ac28f6f4406fd1bcf7f8a09ebbd
  replacement SHA-256: 23f19c37262cc0b415ae6963487d2a3535ed80f0d23cb4ac390963ec37a79a52
print.png
  excluded original SHA-256: edd30aeb316b6e69ee2880ae05d4d83a006c792cc712bb1db51dcec586d0af5d
  replacement SHA-256: b27c9ad44f3ba422178358eb67311950e392bb9fe4701aa6ebdcbcdc94799bab
logo.png
  excluded original SHA-256: 718caba137f37cdaeaf3942f6f7835848f93429e9ab6d035c78585674d3ef9fe
  replacement SHA-256: 12981874284e3f7494adf024f7c86ddce7b5cf6fa01d7a984397dbab38b2eec4
defaultBook.png
  excluded original SHA-256: 9038c70b476886231f604d5e50e86dfa2ca30e34b81cadd7e6e81e6de62ef4d8
  replacement SHA-256: 067125f8ef0427e6e2e89cf4642b489515125e8c418e79b7f91e203881fdb47f
defaultStudent.png
  excluded original SHA-256: 30941bd47844d280a6820e64f4e01d9b7755349996135e9bd185ee1ae164c9b8
  replacement SHA-256: 6c755350ab0e50dced3220eb46bfc9fe1f8490dac70110fcdca8c722763730eb
```
