import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-progress-field', IndexField)
  app.component('detail-nova-progress-field', DetailField)
  app.component('form-nova-progress-field', FormField)
})
