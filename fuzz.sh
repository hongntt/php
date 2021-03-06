#!/bin/bash

set -e

go get github.com/dvyukov/go-fuzz/go-fuzz
go get github.com/dvyukov/go-fuzz/go-fuzz-build

go-fuzz-build github.com/stephens2424/php/parser
go-fuzz -bin php-fuzz.zip -workdir testdata/fuzzdir -master ":1234"
