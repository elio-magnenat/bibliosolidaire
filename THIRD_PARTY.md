# Third-party components and redistribution notices

This inventory covers the third-party assets actually present in `ressources/style/`. License texts were added without changing application bundles. Seven uncertain PNGs were subsequently replaced with documented Font Awesome renders. Existing headers, author credits, and the original [Font Awesome summary](ressources/style/vendor/fontawesome-free/LICENSE.txt) are preserved.

## Included components

| Component | Identification | License | Local text | Evidence / scope |
| --- | --- | --- | --- | --- |
| SB Admin 2 | 4.1.3 | MIT | [License](licenses/sb-admin-2-MIT.txt) | CSS/JS version headers. Bootstrap CSS is also inside the theme stylesheet. |
| Bootstrap | 4.6.0 | MIT | [License](licenses/bootstrap-MIT.txt) | CSS and JavaScript bundle headers. |
| Popper.js | 1.x, inside the Bootstrap 4 bundle | MIT | [License](licenses/popper-MIT.txt) | License text from 1.16.1; exact embedded revision not independently established. |
| jQuery | 3.6.0 | MIT | [License](licenses/jquery-MIT.txt) | Version header. |
| jQuery Easing | version unmarked in the supplied minified file | BSD-3-Clause | [License](licenses/jquery-easing-BSD.txt) | Notices include George McGinley Smith and Robert Penner. |
| Cropper.js | 1.5.13 | MIT | [License](licenses/cropperjs-MIT.txt) | CSS and JavaScript version headers. |
| DataTables core / Bootstrap integration | core 1.10.24; integration unversioned | MIT | [License](licenses/datatables-MIT.txt) | Original SpryMedia notices retained. |
| DataTables Buttons / HTML5 export | Buttons 2.4.1; HTML5 file unversioned | MIT | [License](licenses/datatables-buttons-MIT.txt) | FileSaver.js 1.3.3 is embedded in HTML5 export; pdfmake also contains its own 2.0.5 copy. |
| DataTables Select | 1.7.0; Bootstrap CSS unversioned | MIT | [License](licenses/datatables-select-MIT.txt) | JavaScript version header. |
| DataTables date-euro plug-in | unversioned | MIT | [License](licenses/datatables-plugins-MIT.txt) | Ronan Guilloux attribution retained. |
| FileSaver.js | 1.3.3, embedded in HTML5 export | MIT | [License](licenses/filesaver-MIT.txt) | Eli Grey copyright retained in the containing file. |
| pdfmake | 0.2.7; entire official build matched after normalizing 77 nonbreaking spaces | MIT and embedded dependency terms | [Top-level license](licenses/pdfmake-MIT.txt), [collected notices](licenses/pdfmake-BUNDLED-NOTICES.txt) | [Build evidence and remaining questions](docs/PDFMAKE_PROVENANCE.md). |
| Roboto | 3.005 (2022), four fonts embedded in vfs_fonts.js | Apache-2.0 | [License](licenses/Roboto-Apache-2.0.txt) | Copyright and license read from embedded font metadata. |
| Font Awesome Free | 5.15.3 | MIT / SIL OFL 1.1 / CC BY 4.0 | [License](licenses/SIL-OFL-1.1.txt) | Original vendor license summary and embedded comments retained. |

Font Awesome's CSS/code uses MIT, redistributed fonts use SIL OFL 1.1, and upstream SVG/JS icon artwork is covered by CC BY 4.0. The original vendor summary, [OFL text](licenses/SIL-OFL-1.1.txt), [CC BY text](licenses/CC-BY-4.0.txt), and [font copyright metadata](licenses/font-copyrights.txt) are included. Brand glyphs remain subject to their owners' trademarks; their presence does not imply endorsement. Keep the original vendor summary and file comments.

Roboto's embedded metadata identifies “Copyright 2011 Google Inc. All Rights Reserved.” and Apache License 2.0. Both the [copyright notice](licenses/font-copyrights.txt) and license text are supplied.

## License sources

These are license-documentation copies, not software upgrades. Sources using `master` or `main` provide upstream license wording where the original bundle did not identify a source revision.
- [sb-admin-2-MIT.txt](licenses/sb-admin-2-MIT.txt) — [upstream source](https://raw.githubusercontent.com/StartBootstrap/startbootstrap-sb-admin-2/v4.1.3/LICENSE)
- [bootstrap-MIT.txt](licenses/bootstrap-MIT.txt) — [upstream source](https://raw.githubusercontent.com/twbs/bootstrap/v4.6.0/LICENSE)
- [jquery-MIT.txt](licenses/jquery-MIT.txt) — [upstream source](https://raw.githubusercontent.com/jquery/jquery/3.6.0/LICENSE.txt)
- [cropperjs-MIT.txt](licenses/cropperjs-MIT.txt) — [upstream source](https://raw.githubusercontent.com/fengyuanchen/cropperjs/v1.5.13/LICENSE)
- [datatables-MIT.txt](licenses/datatables-MIT.txt) — [upstream source](https://raw.githubusercontent.com/DataTables/Dist-DataTables/1.10.24/License.txt)
- [datatables-buttons-MIT.txt](licenses/datatables-buttons-MIT.txt) — [upstream source](https://raw.githubusercontent.com/DataTables/Buttons/2.4.1/License.txt)
- [datatables-select-MIT.txt](licenses/datatables-select-MIT.txt) — [upstream source](https://raw.githubusercontent.com/DataTables/Select/1.7.0/License.txt)
- [datatables-plugins-MIT.txt](licenses/datatables-plugins-MIT.txt) — [upstream source](https://raw.githubusercontent.com/DataTables/Plugins/master/License.txt)
- [jquery-easing-BSD.txt](licenses/jquery-easing-BSD.txt) — [upstream source](https://raw.githubusercontent.com/gdsmith/jquery.easing/master/LICENSE-BSD-3-Clause.txt)
- [pdfmake-MIT.txt](licenses/pdfmake-MIT.txt) — [upstream source](https://raw.githubusercontent.com/bpampuch/pdfmake/0.2.7/LICENSE)
- [filesaver-MIT.txt](licenses/filesaver-MIT.txt) — [upstream source](https://raw.githubusercontent.com/eligrey/FileSaver.js/1.3.3/LICENSE.md)
- [popper-MIT.txt](licenses/popper-MIT.txt) — [upstream source](https://raw.githubusercontent.com/PopperJS/popper.js/v1.16.1/LICENSE.md)
- [Roboto-Apache-2.0.txt](licenses/Roboto-Apache-2.0.txt) — [upstream source](https://www.apache.org/licenses/LICENSE-2.0.txt)
- [SIL-OFL-1.1.txt](licenses/SIL-OFL-1.1.txt) — [upstream source](https://raw.githubusercontent.com/spdx/license-list-data/main/text/OFL-1.1.txt)
- [CC-BY-4.0.txt](licenses/CC-BY-4.0.txt) — [upstream source](https://creativecommons.org/licenses/by/4.0/legalcode.txt)

## Locally replaced interface artwork

The seven PNGs in `ressources/style/img/` (`add`, `borrow`, `restore`, `print`, `logo`, `defaultBook`, and `defaultStudent`) were replaced on 24 October 2026. The previous files had no established source or redistribution grant.

Replacements were rendered locally from **Font Awesome Free 5.15.3 by Fonticons, Inc.** using the bundled font. Attribution, glyphs, transformations, usage, dimensions, original/replacement hashes, and regeneration instructions are in [ASSET_PROVENANCE.md](docs/ASSET_PROVENANCE.md). The Font Awesome icon-artwork CC BY 4.0 and source-font OFL notices are retained. These are not ETML or African Puzzle logos. Four genuine screenshots were updated accordingly.

## Pickadate

Pickadate/Pickatime is not redistributed or loaded by this application. No version can therefore be assigned to the prepared tree. The [official upstream license](https://github.com/amsul/pickadate.js/blob/master/LICENSE.md) is MIT, but no unused library or unsupported attribution was added. Date fields use native browser controls.

## pdfmake notice review and version provenance

- **pdfmake 0.2.7:** the official entire build is matched after normalizing 77 nonbreaking spaces. The final review identifies 60 actual package source groups, generated helper/runtime fragments, Unicode-derived data, and four Roboto 3.005 fonts. [The supplementary collection](licenses/pdfmake-BUNDLED-NOTICES.txt) now includes the previously missing SASLprep, Unicode-data, Babel-helper notices and pinned upstream MIT declarations. The full Apache text also covers the preserved Google Brotli decoder notice. BSD-3-Clause (ieee754), ISC (inherits/sax), and MIT plus Zlib (pako) notices are retained. [PDFMAKE_PROVENANCE.md](docs/PDFMAKE_PROVENANCE.md) gives the full inventory and primary sources. Several used sources are identical across releases, and Fontkit's transformed JS was not rebuilt: no unique version is invented. These explicit provenance limits do not leave an unidentified license or missing notice in this review. **Redistribution of the two unchanged pdfmake/VFS files is possible with these notices.**
- Some integration assets remain unversioned. Existing notices and upstream component licenses are retained; an exact dependency lockfile for the historical TPI was not recovered.

## Project and association material

No ETML logo, report, assessment sheet, original MySQL data directory, or African Puzzle logo is included. The original association-related footer slogan was removed and replaced with neutral project text. Factual school/association names in the README describe the educational context without claiming endorsement.

[ETML's legal notice](https://www.etml.ch/mentions-legales) does not grant unrestricted reuse of its website assets. No applicable public permission for the association's branding was established. Removed branding is not relied on for publication. Check any school, association, or project agreement governing the author's source before publishing; obtain written permission before restoring institutional assets.

No project-wide license has been created for the original BiblioSolidaire code. Documents in `licenses/` apply only to identified third-party material. See [PUBLICATION_REVIEW.md](docs/PUBLICATION_REVIEW.md) for the publication-review conclusion.
