# pdfmake 0.2.7: final redistribution notice review

Reviewed on 24 October 2026.

## Conclusion

**Redistribution of the unchanged pdfmake bundle and font VFS is possible with the notices retained in this repository.** No unresolved conflicting license or missing notice was identified after the additions below. Existing author notices have been preserved.

This closes the redistribution-notice question; it does not claim recovery of a missing lockfile or exact compiler revision. Where several releases contain the same used sources, all matching releases are recorded instead of assigning an invented installed version. Fontkit's generated JavaScript was not rebuilt; its data fingerprints and official MIT declarations are documented explicitly below.

## What is actually distributed

Only these two pdfmake files are shipped:

- `ressources/style/vendor/datatables/pdfmake.min.js`: official **0.2.7**, equal across the entire decoded file after normalizing 77 upstream nonbreaking spaces to spaces.
- `ressources/style/vendor/datatables/vfs_fonts.js`: official tagged font payload, with whitespace-only packaging differences.

[PDFMAKE_AUDIT.json](PDFMAKE_AUDIT.json) records file hashes, source-map evidence per component, matching release identifiers, official archive URLs, Git revisions where supplied, and license-document hashes.

The official tagged map contains 529 source entries and identifies 60 package source groups. Only actual source entries, nested map contents, inlined data, and generated runtime/helper code were included in the inventory. A dependency declaration alone was not used as inclusion evidence. Complete webpack/Babel compilers, brfs, tests, and other development tools are not distributed.

Adobe AFM/standard-font payloads are absent: there are code/path references to `.afm` files, but no AFM source-map entries, `StartFontMetrics`/`EndFontMetrics` bodies or standard-font binary files in either shipped file. No Adobe font license has been added for a font merely mentioned by code.

Primary build evidence: [tag](https://github.com/bpampuch/pdfmake/tree/0.2.7), [MIT license](https://github.com/bpampuch/pdfmake/blob/0.2.7/LICENSE), [manifest](https://github.com/bpampuch/pdfmake/blob/0.2.7/package.json), [source map](https://github.com/bpampuch/pdfmake/blob/0.2.7/build/pdfmake.min.js.map), [webpack configuration](https://github.com/bpampuch/pdfmake/blob/0.2.7/webpack.config.js).

## Reconciled source groups

- **PDFKit 0.13.0:** all 37 original source entries match its published nested map, including its vendored `lib/saslprep/` adaptation. The latter is identified by the PDFKit release and Git revision, not assigned an unproven npm saslprep version.
- **dfa:** `src/StateMachine.js` matches the nested map of 1.0.0, 1.1.0 and 1.2.0. The used source is identical; MIT declaration and author agree. A single installed version cannot be recovered.
- **FileSaver 2.0.5 inside pdfmake:** exact source match after applying only the string replacement specified by pdfmake's tagged webpack configuration. This is separate from FileSaver 1.3.3 already embedded in the DataTables export file.
- **Linebreak 1.1.1:** classes/pairs source matches, and the 3,838-byte inlined trie exactly matches the published `classes.trie`. Its generator identifies Unicode 13.0 data.
- **Fontkit:** all three inlined shaping tries (526, 3,959 and 3,606 bytes) match both 1.9.0 and 1.9.1. Babel transformation and brfs data embedding are explicitly configured upstream. The exact generated-JS rebuild was not attempted. Both candidate releases and the pinned official README declare MIT, with Devon Govett as author and no standalone license/copyright file. No copyright year was invented.
- **Webpack runtime and Babel helpers:** actual generated code is present. Their MIT notices are retained; whole compiler packages and exact compiler versions are not inferred from these fragments.

Of the 60 groups, 44 have a single matching inspected historical release and 16 have multiple matching releases/fingerprints. Nonunique direct matches have the same declared licensing and the same supplied notice texts, except tiny-inflate 1.0.2 omits the MIT document supplied by 1.0.3 for the identical included code; that complete notice was already collected. The expose-loader runtime matches several releases; `^3.0.0` in the manifest is not represented as a recovered lockfile.

One obsolete `is-generator-function@0.0.0` archive returned 404. Its contents were not inspected; no content or attribution from it is inferred. The actual included source fully matches 1.0.10, whose MIT notice is supplied. This does not leave the included source without a permission notice.

## Missing notices supplied

[The bundled notice collection](../licenses/pdfmake-BUNDLED-NOTICES.txt) preserves the previously recovered MIT, BSD-3-Clause, ISC, Zlib, and Google Apache notices. This pass adds only:

1. **SASLprep original-author notice:** exact MIT document from the official saslprep 1.0.3 archive and its README copyright line. The version identifies the notice source; the adapted code's identity remains PDFKit 0.13.0.
2. **Unicode data permission notice:** the official Unicode copyright/permission section from [ICU release 67.1](https://github.com/unicode-org/icu/blob/release-67-1/icu4c/LICENSE), copied verbatim without ICU's unrelated third-party notices. It covers derived Unicode data in linebreaking, unicode-properties, shaping tries and SASLprep tables. ICU software is not claimed to be bundled.
3. **Babel helper MIT notice:** the official [license text](https://github.com/babel/babel/blob/v7.14.6/LICENSE) for generated helper code; the source tag identifies the text, not a proven compiler version.
4. **Pinned MIT declarations and existing package-author attribution** for [dfa](https://github.com/foliojs/dfa/blob/3f5e603e5082caedabefefdf53e8a6ca3111e966/README.md), [Brotli wrapper](https://github.com/foliojs/brotli.js/blob/e36051345f6d27a56e5f39ea70d2f789b8574046/readme.md), and [fontkit](https://github.com/foliojs-fork/fontkit/blob/04065ec5aaa86ac0fec994ee1e91f444321fa4c5/README.md). Upstream supplies no separate copyright file for these matched archives. Their MIT terms are already printed in the collection; no substitute year or owner was created.

Brotli decoder files retain Google's Apache 2.0 copyright notices; the complete Apache text already supplied for Roboto is expressly referenced for the decoder as well.

## Fonts actually embedded

All four font binaries in the VFS have **Version 3.005; 2022** in their name tables:

| File | Bytes | License and original copyright |
| --- | ---: | --- |
| Roboto-Regular.ttf | 146768 | Apache 2.0; Copyright 2011 Google Inc. All Rights Reserved. |
| Roboto-Medium.ttf | 146884 | Same |
| Roboto-Italic.ttf | 152384 | Same |
| Roboto-MediumItalic.ttf | 152572 | Same |

The name-table license declarations and binary SHA-256 values are in [PDFMAKE_AUDIT.json](PDFMAKE_AUDIT.json). The existing [Apache text](../licenses/Roboto-Apache-2.0.txt) and [font copyright record](../licenses/font-copyrights.txt) are sufficient and unchanged. No newer OFL license was substituted for these historical binaries.

## Included package source inventory

Versions below are content matches, not guesses from semver ranges. Multiple values mean the exact historical installed release is indiscernible from the shipped used sources. Fontkit's weaker data-fingerprint evidence is labelled. Official archive/commit references for every row are in the machine-readable audit.

| Included component | Matching historical release(s) | Verified license | Evidence |
| --- | --- | --- | --- |
| assert | 2.0.0 | MIT | all used source files match |
| @foliojs-fork/linebreak | 1.1.1 | MIT | classes/pairs exact + embedded trie bytes |
| @foliojs-fork/restructure | 2.0.2 | MIT | all used source files match |
| buffer | 6.0.1, 6.0.2, 6.0.3 | MIT | all used source files match |
| core-js | 3.19.0 | MIT | all used source files match |
| crypto-js | 4.1.0, 4.1.1 | MIT | all used source files match |
| dfa | 1.0.0, 1.1.0, 1.2.0 | MIT | nested map StateMachine |
| png-js | 1.0.0 | MIT (LICENSE text; npm license field absent) | all used source files match |
| safer-buffer | 2.1.2 | MIT | all used source files match |
| readable-stream | 3.6.0 | MIT | all used source files match |
| @foliojs-fork/pdfkit | 0.13.0 | MIT | 37 nested-map source contents |
| safe-buffer | 5.1.1, 5.1.2 | MIT | all used source files match |
| unicode-trie | 2.0.0 | MIT | all used source files match |
| svg-to-pdfkit | 0.1.8 | MIT | direct |
| base64-js | 1.3.1 | MIT | all used source files match |
| brotli | 1.3.3 | MIT (wrapper) AND Apache-2.0 (decoder) | all used source files match |
| browserify-zlib | 0.2.0 | MIT | all used source files match |
| call-bind | 1.0.2 | MIT | all used source files match |
| clone | 1.0.4 | MIT | all used source files match |
| deep-equal | 1.1.0, 1.1.1 | MIT | all used source files match |
| define-properties | 1.1.4 | MIT | all used source files match |
| es6-object-assign | 1.1.0 | MIT | all used source files match |
| events | 3.3.0 | MIT | all used source files match |
| expose-loader | 1.0.2, 1.0.3, 2.0.0, 3.0.0, 3.1.0, 4.0.0 | MIT | all used source files match |
| for-each | 0.3.3 | MIT | all used source files match |
| function-bind | 1.1.1 | MIT | all used source files match |
| functions-have-names | 1.2.3 | MIT | all used source files match |
| get-intrinsic | 1.1.3 | MIT | all used source files match |
| gopd | 1.0.1 | MIT | all used source files match |
| has-property-descriptors | 1.0.0 | MIT | all used source files match |
| has-symbols | 1.0.2, 1.0.3 | MIT | all used source files match |
| has-tostringtag | 1.0.0 | MIT | all used source files match |
| has | 1.0.2, 1.0.3 | MIT | all used source files match |
| iconv-lite | 0.6.3 | MIT | all used source files match |
| ieee754 | 1.2.0, 1.2.1 | BSD-3-Clause | all used source files match |
| inherits | 2.0.4 | ISC | all used source files match |
| is-arguments | 1.1.1 | MIT | all used source files match |
| is-callable | 1.2.7 | MIT | all used source files match |
| is-date-object | 1.0.5 | MIT | all used source files match |
| is-generator-function | 1.0.10 | MIT | all used source files match |
| is-nan | 1.3.1, 1.3.2 | MIT | all used source files match |
| is-regex | 1.1.4 | MIT | all used source files match |
| is-typed-array | 1.1.10 | MIT | all used source files match |
| object-is | 1.1.4, 1.1.5 | MIT | all used source files match |
| object-keys | 1.1.1 | MIT | all used source files match |
| pako | 1.0.8, 1.0.9, 1.0.10, 1.0.11 | (MIT AND Zlib) | all used source files match |
| process | 0.11.10 | MIT | all used source files match |
| regexp.prototype.flags | 1.4.3 | MIT | all used source files match |
| sax | 1.2.4 | ISC | all used source files match |
| stream-browserify | 3.0.0 | MIT | all used source files match |
| file-saver | 2.0.5 | MIT | exact official webpack replacement |
| string_decoder | 1.1.0, 1.1.1, 1.2.0, 1.3.0 | MIT | all used source files match |
| tiny-inflate | 1.0.2, 1.0.3 | MIT | all used source files match |
| @foliojs-fork/fontkit | 1.9.0, 1.9.1 | MIT | Three exact shaping-data fingerprints; JavaScript transformed by Babel/brfs, not rebuilt |
| util-deprecate | 1.0.2 | MIT | all used source files match |
| util | 0.12.5 | MIT | all used source files match |
| which-typed-array | 1.1.9 | MIT | all used source files match |
| xmldoc | 1.2.0 | MIT | all used source files match |
| available-typed-arrays | 1.0.5 | MIT | all used source files match |
| unicode-properties | 1.4.0, 1.4.1 | MIT | all used source files match |

## Export and integrity verification

[PDFMAKE_EXPORT_TEST.json](PDFMAKE_EXPORT_TEST.json) records actual output hashes and checks. An isolated browser harness loaded the unchanged DataTables/pdfmake/VFS files and the verbatim book/student page initialization scripts. Each table had 80 fictional rows. Only the harness's download destination was adapted to save bytes through localhost into the allowed temporary folder.

Both table exports produced valid two-page PDFs with all 80 rows, repeated headers, preserved accents and no action column. A separate one-page PDF embedded/rendered Regular, Medium, Italic and MediumItalic. All five pages were rendered and inspected. This pass tests the real export integration; it does not repeat PHP/MySQL workflows or the browser's usual Downloads destination.

The initial temporary save adapter appended `.pdf` twice; this was corrected in the harness only. The final three PDF files passed parsing/text/font checks. All 77 application/resource/tool files retained their before/after hashes. No application code, bundle, font, image, SQL, or feature was modified. Temporary tests and downloads are removed after verification.
