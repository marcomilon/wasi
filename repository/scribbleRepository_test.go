package repository

import (
	"os"
	"testing"
)

func TestNew(t *testing.T) {
	storagePath := "../storage/testdb"

	NewScribbleRepository(storagePath)

	if _, err := os.Stat(storagePath); err != nil {
		t.Error("Expected database storage path: ", storagePath)
	}
}
