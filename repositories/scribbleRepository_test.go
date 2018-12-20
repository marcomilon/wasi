package repositories

import (
	"os"
	"testing"
)

func TestNew(t *testing.T) {
	var sliceRepository Repository = ScribbleRepository.New()

	if _, err := os.Stat("./storage/testdb"); err != nil {
		t.Error("Expected database, got nothing")
	}
}
