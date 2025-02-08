import { Routes } from '@angular/router';
import { MovieDetailComponent } from './features/movie/movie-detail/movie-detail.component';
import { MovieListComponent } from './features/movie/movie-list/movie-list.component';

export const routes: Routes = [
  {
    path: 'movies',
    component: MovieListComponent,
  },
  {
    path: 'movie/:id',
    component: MovieDetailComponent,
  },
  { path: '**', redirectTo: 'movies' },
];
