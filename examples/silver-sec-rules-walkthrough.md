# Silver Sec Rules Index Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 119 | watch |
| stress | claim drift | 187 | ship |
| edge | replay exposure | 158 | ship |
| recovery | policy width | 216 | ship |
| stale | trust boundary | 151 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.
