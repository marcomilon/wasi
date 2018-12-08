package element

type ElmtService struct {
	Repository Repository
}

func (s ElmtService) Persist(e Element) {
	s.Repository.Create(e)
}

func (s ElmtService) ReadAll() {
	s.Repository.List()
}
