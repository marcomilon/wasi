package services

import (
	"github.com/marcomilon/wasi/elements"
	"github.com/marcomilon/wasi/repositories"
)

type AtomService struct {
	repository repositories.Repository
}

func (a AtomService) Store(e elements.Element) {
	a.repository.Store(e)
}

func (a AtomService) List() []elements.Element {
	return a.repository.List()
}

func NewAtomService(repository repositories.Repository) AtomService {
	return AtomService{repository: repository}
}
