# CodeAtelier submissions report — question bank action

A companion plugin (`qbank_codeatelierreport`) for the [CodeAtelier](https://github.com/dog-broad/moodle-qtype_codeatelier) question type. It adds a **Submissions report** action to CodeAtelier questions in the question bank, linking straight to that question's submissions report (score and verdict distributions, per-test pass rates, attempt drill-down).

## Requirements

- Moodle 4.5 or later (tested on 4.5 and 5.2).
- The `qtype_codeatelier` question type.

## Installation

Install into `question/bank/codeatelierreport/` (under `public/` on Moodle 5.1+), then visit **Site administration → Notifications**.

```
git clone https://github.com/dog-broad/codeatelier-qbank.git question/bank/codeatelierreport
```

## License

GPLv3 or later. See [LICENSE](LICENSE).
