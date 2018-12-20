package repository

import (
	"os"

	"github.com/google/logger"
	"github.com/marcomilon/wasi/element"
)

type BlackHoleRepository struct{}

const logPath = "logs/blackhole.log"

func init() {

}

func (b BlackHoleRepository) Store(e element.Identifier) {
	logger, fun := buildLogger()
	defer fun()

	logger.Info("BlackholeRepository stored " + e.GetBody())
}

func (b BlackHoleRepository) List() []element.Identifier {
	logger, fun := buildLogger()
	defer fun()

	logger.Info("BlackholeRepository listing")
	var list []element.Identifier
	return list
}

func buildLogger() (*logger.Logger, func()) {
	lf, err := os.OpenFile(logPath, os.O_CREATE|os.O_WRONLY|os.O_APPEND, 0660)
	if err != nil {
		logger.Fatalf("Failed to open log file: %v", err)
	}

	logger := logger.Init("Logger", false, true, lf)

	return logger, func() {
		logger.Close()
		lf.Close()
	}
}
