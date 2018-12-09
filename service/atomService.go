package element

import "github.com/marcomilon/wasi/element"

type AtomService struct {
	repository repository
}

func (a AtomService) Persist(e element.Element) {
	a.repository.create(e)
}

func (a AtomService) ReadAll() {
	a.repository.list()
}

func NewAtomService() {
	return AtomService{repository: repository}
}
