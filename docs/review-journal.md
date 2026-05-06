# Review Journal

The review surface for `silver-sec-rules-index` is deliberately narrow: one fixture, one scoring rule, and one local check.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 119, lane `watch`
- `stress`: `claim drift`, score 187, lane `ship`
- `edge`: `replay exposure`, score 158, lane `ship`
- `recovery`: `policy width`, score 216, lane `ship`
- `stale`: `trust boundary`, score 151, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.
